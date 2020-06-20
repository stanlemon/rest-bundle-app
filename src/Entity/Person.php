<?php
namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;
use Lemon\RestBundle\Annotation as Rest;

/**
 * @ORM\Table()
 * @ORM\Entity()
 * @Rest\Resource()
 */
class Person
{
    /**
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Serializer\Type("string")
     */
    public $id;

    /**
     * @ORM\Column(name="first_name", type="string", length=255, nullable=false)
     * @Assert\NotBlank()
     */
    public $firstName;

    /**
     * @ORM\Column(name="last_name", type="string", length=255, nullable=false)
     * @Assert\NotBlank()
     */
    public $lastName;

    /**
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    public $created;

    /**
     * @ORM\Column(name="updated", type="datetime", nullable=true)
     * @Serializer\ReadOnly()
     */
    public $updated;
}
