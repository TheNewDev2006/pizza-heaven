<?php

namespace App\Services;

class PersonalizationService
{
    public static function getDefaults(): array
    {
        return [
            'business_name' => 'Cynix Inc Digital Solutions',
            'email' => 'info.cynixinc@gmail.com',
            'phone' => '+94722558244',
            'address' => '267, Jampettah Street, Colombo 13',
            'tagline' => 'Delicious Food Near Your Town',
            'logo' => null,
            'primary_color' => '#e74c3c',
            'website' => 'cynixinc.com',
            'facebook' => '#',
            'twitter' => '#',
            'linkedin' => '#',
            'instagram' => '#',
        ];
    }

    public static function getPersonalization(array $params): array
    {
        $defaults = self::getDefaults();

        return [
            'business_name' => $params['bn'] ?? $defaults['business_name'],
            'email' => $params['e'] ?? $defaults['email'],
            'phone' => $params['p'] ?? $defaults['phone'],
            'address' => $params['a'] ?? $defaults['address'],
            'tagline' => $params['t'] ?? $defaults['tagline'],
            'logo' => $params['logo'] ?? $defaults['logo'],
            'primary_color' => $params['color'] ?? $defaults['primary_color'],
            'website' => $params['w'] ?? $defaults['website'],
            'facebook' => $params['fb'] ?? $defaults['facebook'],
            'twitter' => $params['tw'] ?? $defaults['twitter'],
            'linkedin' => $params['li'] ?? $defaults['linkedin'],
            'instagram' => $params['ig'] ?? $defaults['instagram'],
        ];
    }

    public static function getShortParams(): array
    {
        return [
            'bn' => 'business_name',
            'e' => 'email',
            'p' => 'phone',
            'a' => 'address',
            't' => 'tagline',
            'logo' => 'logo',
            'color' => 'primary_color',
            'w' => 'website',
            'fb' => 'facebook',
            'tw' => 'twitter',
            'li' => 'linkedin',
            'ig' => 'instagram',
        ];
    }
}
