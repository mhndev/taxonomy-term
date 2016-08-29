<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 8/29/16
 * Time: 11:35 AM
 */
namespace mhndev\taxonomyTerm\Traits;

use mhndev\taxonomyTerm\Interfaces\iTerm;

/**
 * Class EntityTrait
 * @package mhndev\taxonomyTerm\Traits
 */
trait EntityTrait
{

    /**
     * @param iTerm $term
     * @return $this
     */
    abstract public function addTerm(iTerm $term);

    /**
     * @param iTerm $term
     * @return $this
     */
    abstract public function removeTerm(iTerm $term);

    /**
     * @return mixed
     */
    abstract public function listTerms();

}
