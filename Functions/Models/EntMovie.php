<?php

class EntMovie{

    public $movieId;
    public $title;
    public $genres;

    /**
     * EntMovie constructor.
     * @param $movieId
     * @param $title
     * @param $genres
     */
    public function __construct($movieId, $title, $genres)
    {
        $this->movieId = $movieId;
        $this->title = $title;
        $this->genres = $genres;
    }

    /**
     * @return mixed
     */
    public function getMovieId()
    {
        return $this->movieId;
    }

    /**
     * @param mixed $movieId
     */
    public function setMovieId($movieId)
    {
        $this->movieId = $movieId;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getGenres()
    {
        return $this->genres;
    }

    /**
     * @param mixed $genres
     */
    public function setGenres($genres)
    {
        $this->genres = $genres;
    }


}
