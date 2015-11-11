<?php

namespace Professore\Resource;

use Professore\AbstractResource;
use Professore\Entity\User;

/**
 * Class Resource
 * @package Professore
 */
class UserResource extends AbstractResource
{

    /**
     * @param $id
     *
     * @return string
     */
    public function get($id)
    {
        if ($id === null) {
            $users = $this->getEntityManager()->getRepository('Professore\Entity\User')->findAll();
            $users = array_map(function($user) {
                return $this->convertToArray($user); },
                $users);
            $data = json_encode($users);
        } else {
            $data = $this->convertToArray($this->getEntityManager()->find('Professore\Entity\User', $id));
        }

        // @TODO handle correct status when no data is found...

        return json_encode($data);
    }

    // POST, PUT, DELETE methods...

    private function convertToArray(User $user) {
        return array(
            'id' => $user->getId(),
            'name' => $user->getName(),
            'email' => $user->getEmail()
        );
}

}
