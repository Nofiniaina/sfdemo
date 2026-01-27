<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{

  public const USER_REFERENCE = "user_";

  public function __construct(private UserPasswordHasherInterface $pwdHasher) {
  }

  public function load(ObjectManager $manager): void
  {
    // $product = new Product();
    // $manager->persist($product);

    $users = [
    	[
        'username' => 'sarah.johnson',
        'email' => 'sarah.johnson@example.com',
        'fullName' => 'Sarah Johnson',
        'roles' => [User::ROLE_ADMIN],
        'password' => 'admin123'
      ],
      [
        'username' => 'michael.chen',
        'email' => 'michael.chen@example.com',
        'fullName' => 'Michael Chen',
        'roles' => [User::ROLE_USER],
        'password' => 'user123'
      ],
      [
        'username' => 'emma.rodriguez',
        'email' => 'emma.rodriguez@example.com',
        'fullName' => 'Emma Rodriguez',
        'roles' => [User::ROLE_EDITOR],
        'password' => 'user123'
      ],
      [
        'username' => 'james.wilson',
				'email' => 'james.wilson@example.com',
        'fullName' => 'James Wilson',
        'roles' => [User::ROLE_EDITOR],
        'password' => 'editor123'
      ]
    ];

		foreach ($users as $index => $userData) {
			$user = new User();

			$user->setUsername($userData['username']);
			$user->setFullName($userData['fullName']);
			$user->setEmail($userData['email']);
			$user->setRoles($userData['roles']);

			// hash password
			$password = $this->pwdHasher->hashPassword($user, $userData['password']);
			$user->setPassword($password);

			$manager->persist($user);
      $this->addReference(self::USER_REFERENCE . ($index + 1),$user);
		}

    $manager->flush();
  }
}
