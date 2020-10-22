<?php


class EntRating
{
    public $UserId;
    public $MovieId;
    public $Rating;

    /**
     * EntRating constructor.
     * @param $UserId
     * @param $MovieId
     * @param $Rating
     */
    public function __construct($UserId, $MovieId, $Rating)
    {
        $this->UserId = $UserId;
        $this->MovieId = $MovieId;
        $this->Rating = $Rating;
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

    /**
     * @return mixed
     */
    public function getRating()
    {
        return $this->Rating;
    }

    /**
     * @param mixed $Rating
     */
    public function setRating($Rating)
    {
        $this->Rating = $Rating;
    }

}