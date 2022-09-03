<?php 
namespace App\Repository;

use App\Models\Module;

class ModuleRepository {
    protected $entity;

    public function __construct(Module $model) {
        $this->entity = $model;
    }   

    public function getModulesByCourseId($courseId) {
        return $this->entity->where('course_id', $courseId)->get();
    }

    public function getCourse(string $id) {
        return $this->entity->findOrFail($id);
    }
}
?>
