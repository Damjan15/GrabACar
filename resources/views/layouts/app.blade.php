@props(['title' => '', 'footerLinks' => ''])

<x-base-layout :$title :$footerLinks>
    <x-layouts.header />

    {{$slot}}

</x-base-layout>