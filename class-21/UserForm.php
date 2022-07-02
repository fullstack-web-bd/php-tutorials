<?php

require_once 'Sanitizer.php';

class UserForm {
    use Sanitizer;

    public function showData()
    {
        $datas = [
            [
                'value' => "akash",
                'name' => 'username',
                'type' => 'text',
            ],
            [
                'value' => "1<script>alert('You are hacked...')<script>",
                'name' => 'id',
                'type' => 'number',
            ],
            [
                'value' => "1",
                'name' => 'is_active',
                'type' => 'boolean',
            ]
        ];

        foreach ($datas as $index => $data) {
            $datas[$index] = $this->sanitize($data);
        }

        return $datas;
    }
}