<?php

trait Sanitizer {
    /**
     * Sanitizer for an input
     *
     * @example $data = [
     *   'value' => "AKASH"
     *   'name' => 'username'
     *   'type' => 'number',
     * ] description
     *
     * @param array $data
     *
     * @return void
     */
    public function sanitize(array $data)
    {
        switch ($data['type']) {
            case 'number':
                $data['value'] = intval( $data['value'] );
                break;

            case 'text':
                $data['value'] = htmlspecialchars( $data['value'] );
                break;

            case 'boolean':
                $data['value'] = boolval( $data['value'] );
                break;

            default:
                # code...
                break;
        }

        return $data;
    }
}