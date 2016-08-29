<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 8/29/16
 * Time: 11:33 AM
 */
namespace mhndev\taxonomyTerm\Interfaces;

/**
 * Interface iTerm
 * @package mhndev\taxonomyTerm\Interfaces
 */
interface iTerm
{

    /**
     * @return iTaxonomy
     */
    public function getTaxonomy();


    /**
     * @param iTaxonomy $taxonomy
     * @return $this
     */
    public function setTaxonomy(iTaxonomy $taxonomy);


    /**
     * @return iTerm
     */
    public function getParent();


    /**
     * @param iTerm $term
     * @return $this
     */
    public function setParent(iTerm $term);


    /**
     * @return mixed
     */
    public function removeChildren();

    /**
     * @param iTerm $term
     * @return $this
     */
    public function removeChild(iTerm $term);


    /**
     * @param iTerm $term
     * @return $this
     */
    public function addChild(iTerm $term);


    /**
     * @param array $children array of iTerm
     * @return $this
     */
    public function setChildren(array $children);


    /**
     * @return array
     */
    public function getChildren();


    /**
     * GetUsedCount
     *
     * This function returns usage number of this term
     *
     * @return integer
     */
    public function getUsedCount();


    /**
     * GetUsedEntities
     *
     * This function returns Entities which has used this term
     *
     * @return array
     */
    public function getUsedEntities();
}
