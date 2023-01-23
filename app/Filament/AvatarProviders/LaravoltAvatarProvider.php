<?php

namespace App\Filament\AvatarProviders;


use Filament\AvatarProviders\Contracts\AvatarProvider;
use Filament\Facades\Filament;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Laravolt\Avatar\Avatar;

class LaravoltAvatarProvider implements AvatarProvider
{


    public function get(Model $user): string
    {
        $name = Str::of(Filament::getUserName($user))
            ->trim()
            ->explode(' ')
            ->map(fn (string $segment): string => filled($segment) ? mb_substr($segment, 0, 1) : '')
            ->join(' ');
        $avatar = new Avatar(config('laravolt.avatar'));
        return $avatar->create($name)->toBase64();
    }
}
