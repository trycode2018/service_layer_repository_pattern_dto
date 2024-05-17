<?php

    namespace App\DTO;

    use App\Http\Requests\StoreUpdateRequest;

    class CreateSupportDTO{

        public function __construct(
            protected string $subject,
            protected string $body,
            protected string $status
        ){}

        public function makeFromRequest(StoreUpdateRequest $request)
        {
            return new self(
                $request->subject,
                $request->body,
                'a'
            );
        }
    }
?>