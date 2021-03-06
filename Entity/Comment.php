<?php
/**
 * @package Newscoop\CommentListsBundle
 * @author Rafał Muszyński <rafal.muszynski@sourcefabric.org>
 * @copyright 2013 Sourcefabric o.p.s.
 * @license http://www.gnu.org/licenses/gpl-3.0.txt
 */

namespace Newscoop\CommentListsBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Newscoop\CommentListsBundle\TemplateList\CommentCriteria;

/**
 * Comment entity
 *
 * @ORM\Entity()
 * @ORM\Table(name="plugin_comment_lists_comments")
 */
class Comment
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer", name="id")
     * @var int
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="\Newscoop\Entity\Comment")
     * @ORM\JoinColumn(name="comment_id", referencedColumnName="id")
     * @var Newscoop\Entity\Comment
     */
    private $comment;

    /**
     * @ORM\Column(type="integer", name="comment_id")
     * @var int
     */
    private $commentId;

    /**
     * @ORM\ManyToOne(targetEntity="\Newscoop\CommentListsBundle\Entity\CommentList", inversedBy="comments")
     * @ORM\JoinColumn(name="list_id", referencedColumnName="id")
     * @var Newscoop\CommentListsBundle\Entity\CommentList
     */
    private $list;

    /**
     * @ORM\Column(type="integer", name="list_id")
     * @var int
     */
    private $listId;

    /**
     * @ORM\Column(type="integer", name="comment_order")
     * @var int
     */
    private $order;

    /**
     * @ORM\Column(type="text", name="edited_message", nullable=true)
     * @var text
     */
    private $editedMessage;

    /**
     * @ORM\Column(type="string", length=140, name="edited_subject", nullable=true)
     * @var string
     */
    private $editedSubject;

    /**
     * @ORM\Column(type="datetime", name="created_at")
     * @var datetime
     */
    private $created_at;

    /**
     * @ORM\Column(type="boolean", name="is_active")
     * @var boolean
     */
    private $is_active;

    public function __construct() {
        $this->list = new ArrayCollection();
        $this->setCreatedAt(new \DateTime());
        $this->setIsActive(true);
    }

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
     * Get comment
     *
     * @return int
     */
    public function getCommentId()
    {
        return $this->commentId;
    }

    /**
     * Set comment
     *
     * @param int $commentId
     *
     * @return int
     */
    public function setCommentId($commentId)
    {
        $this->commentId = $commentId;

        return $this;
    }

    /**
     * Get list Id
     *
     * @return int
     */
    public function getListId()
    {
        return $this->commentId;
    }

    /**
     * Set list Id
     *
     * @param int $listId
     *
     * @return int
     */
    public function setListId($listId)
    {
        $this->listId = $listId;

        return $this;
    }

    /**
     * Get comment
     *
     * @return int
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set comment
     *
     * @param int $comment
     *
     * @return int
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get edited comment message
     *
     * @return text
     */
    public function getEditedMessage()
    {
        return $this->editedMessage;
    }

    /**
     * Set edited comment message
     *
     * @param text $editedMessage
     *
     * @return text
     */
    public function setEditedMessage($editedMessage)
    {
        $this->editedMessage = $editedMessage;

        return $this;
    }

    /**
     * Get edited comment subject
     *
     * @return string
     */
    public function getEditedSubject()
    {
        return $this->editedSubject;
    }

    /**
     * Set edited comment subject
     *
     * @param string $editedSubject
     *
     * @return string
     */
    public function setEditedSubject($editedSubject)
    {
        $this->editedSubject = $editedSubject;

        return $this;
    }

    /**
     * Get list
     *
     * @return int
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * Set list
     *
     * @param  int $list
     * @return int
     */
    public function setList($list)
    {
        $this->list = $list;
        
        return $list;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->is_active;
    }

    /**
     * Set status
     *
     * @param boolean $is_active
     * @return boolean
     */
    public function setIsActive($is_active)
    {
        $this->is_active = $is_active;
        
        return $this;
    }

    /**
     * Get order
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set order
     *
     * @param  int $order
     * @return int
     */
    public function setOrder($order)
    {
        $this->order = $order;
        
        return $order;
    }

    /**
     * Get create date
     *
     * @return datetime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set create date
     *
     * @param datetime $created_at
     * @return datetime
     */
    public function setCreatedAt(\DateTime $created_at)
    {
        $this->created_at = $created_at;
        
        return $this;
    }
}