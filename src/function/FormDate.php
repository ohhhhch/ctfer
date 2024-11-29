<?php
class FormDate {
    public function FormTime($date) {
        $datetime = new DateTime($date);
        return $datetime->format('Y-m-d');
    }
}