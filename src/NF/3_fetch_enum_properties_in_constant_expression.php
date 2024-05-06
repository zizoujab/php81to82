<?php

enum Status: string
{
    case DRAFT = 'draft';
    case PUBLISHED = 'published';
    case ARCHIVED = 'archived';
}

#[Attribute]
class ListensTo
{
    public array $events;

    public function __construct(array $events)
    {

        $this->events = $events;
    }
}

#[ListensTo([Status::DRAFT->value => true])]
class TestClass {}
