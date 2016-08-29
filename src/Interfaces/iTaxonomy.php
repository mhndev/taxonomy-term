<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 8/29/16
 * Time: 11:32 AM
 */
namespace mhndev\taxonomyTerm\Interfaces;

/**
 * Interface iTaxonomy
 * @package mhndev\taxonomyTerm\Interfaces
 */
interface iTaxonomy
{

    /**
     * @param iTerm $term
     * @return $this
     */
    public function addTerm(iTerm $term);

    /**
     * @param iTerm $term
     * @return $this
     */
    public function removeTerm(iTerm $term);

    /**
     * @return mixed
     */
    public function listTerms();

}
