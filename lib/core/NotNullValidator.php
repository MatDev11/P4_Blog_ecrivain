<?php
namespace core;

class NotNullValidator extends Validator
{
  public function isValid($value)
  {
    return $value != '';
  }
}