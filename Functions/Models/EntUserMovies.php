<?php


class EntUserMovies
{

    public $id;
    public $UserId;
    public $MovieId;

    /**
     * EntUserMovies constructor.
     * @param $id
     * @param $UserId
     * @param $MovieId
     */
    public function __construct($id, $UserId, $MovieId)
    {
        $this->id = $id;
        $this->UserId = $UserId;
        $this->MovieId = $MovieId;
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
    public function getUserId()
    {
        return $this->UserId;
    }

    /**
     * @param mixed $UserId
     */
    public function setUserId($UserId)
    {
        $this->UserId = $UserId;
    }

    /**
     * @return mixed
     */
    public function getMovieId()
    {
        return $this->MovieId;
    }

    /**
     * @param mixed $MovieId
     */
    public function setMovieId($MovieId)
    {
        $this->MovieId = $MovieId;
    }
}