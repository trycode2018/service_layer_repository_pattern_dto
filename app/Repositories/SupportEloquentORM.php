<?php

    namespace App\Repositories;

    use App\Http\Models\Support;
    class SupportEloquentORM implements SupportRepositoryInterface{

        public function __construct(
            protected Support $model
        ){}
        
        public function getAll(string $filter = null) : array{
            return $this->model->where(
                function($query) use ($filter){
                    if($filter){
                        $query->where('subject',$filter);
                        $query->orWhere('body','like',"%{$filter}%");
                    }
                }
            )->get()
             ->toArray();
        }

        public function findOne(string $id): stdClass|null{
            $support = $this->model->find($id);
            if(!$support){
                return null;
            }
            return (object) $support->toArray();
        }

        public function delete(string $id):void{
            $this->model->findOrFail($id)->delete();
        }

        public function new(CreateSupportDTO $dto): stdClass{

        }

        public function update(UpdateSupportDTO $dto): stdClass|null{

        }
    }
?>