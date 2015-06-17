<?php namespace Grace\Repositories;

/**
 * Interface CrudableInterface
 * @package Grace\Repositories
 * @author Phillip Madsen
 */
interface CrudableInterface {

    /**
     * Get data by id
     * @param $id
     * @return mixed
     */
    public function find($id);

    /**
     * Create new data
     * @param $attributes
     * @return mixed
     */
    public function create($attributes);

    /**
     * Update data
     * @param $id
     * @param $attributes
     * @return mixed
     */
    public function update($id, $attributes);

    /**
     * Delete data by id
     * @param $id
     * @return mixed
     */
    public function delete($id);
}