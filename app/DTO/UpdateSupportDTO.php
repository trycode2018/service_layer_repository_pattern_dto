<?php

    namespace App\DTO;

    use App\Http\Requests\StoreUpdateRequest;

    class UpdateSupportDTO{

        public function __construct(
            protected string $id,
            protected string $subject,
            protected string $body,
            protected string $status
        ){}

        public function makeFromRequest(StoreUpdateRequest $request)
        {
            return new self(
                $request->id,
                $request->subject,
                $request->body,
                'a'
            );
        }
    }
?>