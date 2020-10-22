<?php

class EntAchievement
{

    public $id;
    public $AchievementName;
    public $AchievementDiscription;

    /**
     * EntAchievement constructor.
     * @param $id
     * @param $AchievementName
     * @param $AchievementDiscription
     */
    public function __construct($id, $AchievementName, $AchievementDiscription)
    {
        $this->id = $id;
        $this->AchievementName = $AchievementName;
        $this->AchievementDiscription = $AchievementDiscription;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getAchievementName()
    {
        return $this->AchievementName;
    }

    /**
     * @param mixed $AchievementName
     */
    public function setAchievementName($AchievementName)
    {
        $this->AchievementName = $AchievementName;
    }

    /**
     * @return mixed
     */
    public function getAchievementDiscription()
    {
        return $this->AchievementDiscription;
    }

    /**
     * @param mixed $AchievementDiscription
     */
    public function setAchievementDiscription($AchievementDiscription)
    {
        $this->AchievementDiscription = $AchievementDiscription;
    }


}