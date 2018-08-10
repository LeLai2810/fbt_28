<?php

namespace App\Services;

use Laravel\Socialite\Contracts\User as ProviderUser;
use App\Models\SocialAccount;
use App\Models\User;

class SocialAccountService
{
    public function createOrGetUser(ProviderUser $providerUser, $social)
    {
        $account = SocialAccount::whereProvider($social)
            ->whereProviderId($providerUser->getId())
            ->first();

        if ($account) {
            return $account->user;
        } else {
            $email = $providerUser->getEmail() ?? $providerUser->getNickname();
            $account = new SocialAccount([
                'provider_id' => $providerUser->getId(),
                'provider' => $social
            ]);
            $user = User::whereEmail($email)->first();

            if (!$user) {

                $user = User::create([
                    'email' => $email,
                    'name' => $providerUser->getName(),
                    'password' => $providerUser->getName(),
                ]);
            }

            $account->user()->associate($user);
            $account->save();

            return $user;
        }
    }
}
