<?php

declare(strict_types=1);

trait ColorHelper
{
    public function RGBToCIE($red, $green, $blue, $opt = false)
    {
        $red = ($red > 0.04045) ? pow(($red + 0.055) / (1.0 + 0.055), 2.4) : ($red / 12.92);
        $green = ($green > 0.04045) ? pow(($green + 0.055) / (1.0 + 0.055), 2.4) : ($green / 12.92);
        $blue = ($blue > 0.04045) ? pow(($blue + 0.055) / (1.0 + 0.055), 2.4) : ($blue / 12.92);

        $X = $red * 0.664511 + $green * 0.154324 + $blue * 0.162028;
        $Y = $red * 0.283881 + $green * 0.668433 + $blue * 0.047685;
        $Z = $red * 0.000088 + $green * 0.072310 + $blue * 0.986039;
        $this->SendDebug('RGBToCIE', 'X: ' . $X . ' Y: ' . $Y . ' Z: ' . $Z, 0);

        if ($opt) {
            $cie['x'] = round(($X / ($X + $Y + $Z) * 65536), 0);
            $cie['y'] = round(($Y / ($X + $Y + $Z) * 65536), 0);
        } else {
            $cie['x'] = round(($X / ($X + $Y + $Z)), 4);
            $cie['y'] = round(($Y / ($X + $Y + $Z)), 4);
        }

        return $cie;
    }

    protected function CIEToRGB($x, $y, $brightness = 255, $opt = false)
    {
        if ($opt) {
            $x = $x / 65536;
            $y = $y / 65536;
        }

        $z = 1.0 - $x - $y;
        $Y = $brightness / 255;
        $X = ($Y / $y) * $x;
        $Z = ($Y / $y) * $z;

        $red = $X * 1.656492 - $Y * 0.354851 - $Z * 0.255038;
        $green = -$X * 0.707196 + $Y * 1.655397 + $Z * 0.036152;
        $blue = $X * 0.051713 - $Y * 0.121364 + $Z * 1.011530;

        if ($red > $blue && $red > $green && $red > 1.0) {
            $green = $green / $red;
            $blue = $blue / $red;
            $red = 1.0;
        } elseif ($green > $blue && $green > $red && $green > 1.0) {
            $red = $red / $green;
            $blue = $blue / $green;
            $green = 1.0;
        } elseif ($blue > $red && $blue > $green && $blue > 1.0) {
            $red = $red / $blue;
            $green = $green / $blue;
            $blue = 1.0;
        }
        $red = $red <= 0.0031308 ? 12.92 * $red : (1.0 + 0.055) * $red ** (1.0 / 2.4) - 0.055;
        $green = $green <= 0.0031308 ? 12.92 * $green : (1.0 + 0.055) * $green ** (1.0 / 2.4) - 0.055;
        $blue = $blue <= 0.0031308 ? 12.92 * $blue : (1.0 + 0.055) * $blue ** (1.0 / 2.4) - 0.055;

        $red = ceil($red * 255);
        $green = ceil($green * 255);
        $blue = ceil($blue * 255);

        $color = sprintf('#%02x%02x%02x', $red, $green, $blue);

        return $color;
    }

    protected function HexToRGB($value)
    {
        $RGB = [];
        $RGB[0] = (($value >> 16) & 0xFF);
        $RGB[1] = (($value >> 8) & 0xFF);
        $RGB[2] = ($value & 0xFF);
        $this->SendDebug('HexToRGB', 'R: ' . $RGB[0] . ' G: ' . $RGB[1] . ' B: ' . $RGB[2], 0);
        return $RGB;
    }

    protected function CieToDec($cie)
    {
        $cie['z'] = 1 - $cie['x'] - $cie['y'];

        $red = $cie['x'] * 1.65649 + $cie['y'] * -0.35485 + $cie['z'] * -0.25504;
        $green = $cie['x'] * -0.7072 + $cie['y'] * 1.6554 + $cie['z'] * 0.03615;
        $blue = $cie['x'] * 0.05171 + $cie['y'] * -0.12137 + $cie['z'] * 1.01153;

        $korr = pow($cie['bri'], 2.4) / max($red, $green, $blue);

        $red = ($red > 0) ? round(pow($red * $korr, 1 / 2.4)) : 0;
        $green = ($green > 0) ? round(pow($green * $korr, 1 / 2.4)) : 0;
        $blue = ($blue > 0) ? round(pow($blue * $korr, 1 / 2.4)) : 0;
        $this->SendDebug('CieToDec(RGB)', 'R: ' . $red . ' G: ' . $green . ' B: ' . $blue, 0);

        $hexred = (strlen(dechex($red)) < 2) ? '0' . dechex($red) : dechex($red);
        $hexgreen = (strlen(dechex($green)) < 2) ? '0' . dechex($green) : dechex($green);
        $hexblue = (strlen(dechex($blue)) < 2) ? '0' . dechex($blue) : dechex($blue);

        $dec = hexdec($hexred . $hexgreen . $hexblue);

        return $dec;
    }
}
