<?php declare(strict_types=1);

namespace Behavioral\Mediator;

class UserRepositoryUiMediator implements Mediator
{
    public function __construct(
        private readonly UserRepository $userRepository,
        private readonly Ui $ui,
    ) {
        $this->userRepository->setMediator($this);
        $this->ui->setMediator($this);
    }

    public function printInfoAbout(string $user): void
    {
        $this->ui->outputUserInfo($user);
    }

    public function getUser(string $username): string
    {
        return $this->userRepository->getUserName($username);
    }
}
