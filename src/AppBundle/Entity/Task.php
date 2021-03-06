<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="task")
 */
class Task
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\Type("string")
     */
    private $status;
    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\Type("string")
     */
    private $name;
    /**
     * @ORM\Column(type="text")
     * @Assert\Type("string")
     * Assert\Length(
     *      min = 2,
     *      max = 200
     *     )
     */
    private $description;
    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\Type("string")
     */
    private $category;
    /**
     *
     * @ORM\Column(type="string", length=100)
     * @ORM\ManyToOne(targetEntity="User", inversedBy="Task")
     *
     */
    private $author;

    /**
     * @ORM\Column(type="integer")
     */
    private $confirmed;

    /**
     * @ORM\Column(type="date")
     *
     */
    private $deadline_date;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Task
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set confirm
     *
     * @param int $confirm
     *
     * @return int
     */
    public function setConfrim($confirm)
    {
        $this->confirmed = $confirm;

        return $this;
    }

    /**
     * Get confirm
     *
     * @return int
     */
    public function getConfirm()
    {
        return $this->confirmed;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Task
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Task
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set category
     *
     * @param string $category
     *
     * @return Task
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set author
     *
     * @param string $author
     *
     * @return Task
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set setDeadlineDate
     *
     * @param \DateTime $deadlineDate
     *
     * @return Task
     */
    public function setDeadlineDate($deadlineDate)
    {
        $this->deadline_date = $deadlineDate;

        return $this;
    }

    /**
     * Get deadlineDate
     *
     * @return \DateTime
     */
    public function getDeadlineDate()
    {
        return $this->deadline_date;
    }

}
