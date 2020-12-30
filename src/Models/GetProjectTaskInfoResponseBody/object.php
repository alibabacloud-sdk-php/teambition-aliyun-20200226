<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\GetProjectTaskInfoResponseBody;

use AlibabaCloud\Tea\Model;

class object extends Model
{
    /**
     * @var string
     */
    public $executorId;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $storyPoint;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var bool
     */
    public $isTopInProject;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $tasklistId;

    /**
     * @var string
     */
    public $visible;

    /**
     * @var bool
     */
    public $isDone;

    /**
     * @var bool
     */
    public $isDeleted;

    /**
     * @var string
     */
    public $taskflowstatusId;

    /**
     * @var string
     */
    public $note;

    /**
     * @var string
     */
    public $sprintId;

    /**
     * @var string
     */
    public $updated;

    /**
     * @var string[]
     */
    public $involveMembers;

    /**
     * @var string
     */
    public $dueDate;

    /**
     * @var string
     */
    public $created;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'executorId'       => 'ExecutorId',
        'projectId'        => 'ProjectId',
        'storyPoint'       => 'StoryPoint',
        'startDate'        => 'StartDate',
        'isTopInProject'   => 'IsTopInProject',
        'priority'         => 'Priority',
        'creatorId'        => 'CreatorId',
        'organizationId'   => 'OrganizationId',
        'taskType'         => 'TaskType',
        'tasklistId'       => 'TasklistId',
        'visible'          => 'Visible',
        'isDone'           => 'IsDone',
        'isDeleted'        => 'IsDeleted',
        'taskflowstatusId' => 'TaskflowstatusId',
        'note'             => 'Note',
        'sprintId'         => 'SprintId',
        'updated'          => 'Updated',
        'involveMembers'   => 'InvolveMembers',
        'dueDate'          => 'DueDate',
        'created'          => 'Created',
        'content'          => 'Content',
        'id'               => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executorId) {
            $res['ExecutorId'] = $this->executorId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->storyPoint) {
            $res['StoryPoint'] = $this->storyPoint;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->isTopInProject) {
            $res['IsTopInProject'] = $this->isTopInProject;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->tasklistId) {
            $res['TasklistId'] = $this->tasklistId;
        }
        if (null !== $this->visible) {
            $res['Visible'] = $this->visible;
        }
        if (null !== $this->isDone) {
            $res['IsDone'] = $this->isDone;
        }
        if (null !== $this->isDeleted) {
            $res['IsDeleted'] = $this->isDeleted;
        }
        if (null !== $this->taskflowstatusId) {
            $res['TaskflowstatusId'] = $this->taskflowstatusId;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }
        if (null !== $this->sprintId) {
            $res['SprintId'] = $this->sprintId;
        }
        if (null !== $this->updated) {
            $res['Updated'] = $this->updated;
        }
        if (null !== $this->involveMembers) {
            $res['InvolveMembers'] = $this->involveMembers;
        }
        if (null !== $this->dueDate) {
            $res['DueDate'] = $this->dueDate;
        }
        if (null !== $this->created) {
            $res['Created'] = $this->created;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return object
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExecutorId'])) {
            $model->executorId = $map['ExecutorId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['StoryPoint'])) {
            $model->storyPoint = $map['StoryPoint'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['IsTopInProject'])) {
            $model->isTopInProject = $map['IsTopInProject'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['TasklistId'])) {
            $model->tasklistId = $map['TasklistId'];
        }
        if (isset($map['Visible'])) {
            $model->visible = $map['Visible'];
        }
        if (isset($map['IsDone'])) {
            $model->isDone = $map['IsDone'];
        }
        if (isset($map['IsDeleted'])) {
            $model->isDeleted = $map['IsDeleted'];
        }
        if (isset($map['TaskflowstatusId'])) {
            $model->taskflowstatusId = $map['TaskflowstatusId'];
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['SprintId'])) {
            $model->sprintId = $map['SprintId'];
        }
        if (isset($map['Updated'])) {
            $model->updated = $map['Updated'];
        }
        if (isset($map['InvolveMembers'])) {
            if (!empty($map['InvolveMembers'])) {
                $model->involveMembers = $map['InvolveMembers'];
            }
        }
        if (isset($map['DueDate'])) {
            $model->dueDate = $map['DueDate'];
        }
        if (isset($map['Created'])) {
            $model->created = $map['Created'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
