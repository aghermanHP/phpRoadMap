<?php


namespace App\Security;

use App\Entity\Task;
use App\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class PostVoter extends Voter
{
    // these strings are just invented: you can use anything
    const VIEW = 'view';
    const EDIT = 'edit';

    /**
     * @param string $attribute
     * @param mixed $subject
     * @return bool
     */
    protected function supports($attribute, $subject)
    {
        // if the attribute isn't one we support, return false
        if (!in_array($attribute, [self::VIEW, self::EDIT])) {
            return false;
        }

        // only vote on `Task` objects
        if (!$subject instanceof Task) {
            return false;
        }

        return true;
    }

    /**
     * @param string $attribute
     * @param mixed $subject
     * @param TokenInterface $token
     * @return bool
     */
    protected function voteOnAttribute($attribute, $subject, TokenInterface $token)
    {
        $user = $token->getUser();

        if (!$user instanceof User) {
            // the user must be logged in; if not, deny access
            return false;
        }

        // you know $subject is a Post object, thanks to `supports()`
        /** @var Task $task */
        $task = $subject;

        switch ($attribute) {
            case self::VIEW:
                return $this->canView($task, $user);
            case self::EDIT:
                return $this->canEdit($task, $user);
        }

        throw new \LogicException('This code should not be reached!');
    }

    private function canView(Task $task, User $user)
    {
        // if they can edit, they can view
        if ($this->canEdit($task, $user)) {
            return true;
        }

        // the Post object could have, for example, a method `isPrivate()`
        return false;
    }

    private function canEdit(Task $task, User $user)
    {
        // this assumes that the Post object has a `getOwner()` method
        return $user === $task->getTask();
    }
}