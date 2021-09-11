<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Language extends Model
{
    use Sushi;

    /** @see https://www.tiobe.com/tiobe-index/ */
    protected $rows = [
        ['name' => 'C'],
        ['name' => 'Python'],
        ['name' => 'Java'],
        ['name' => 'C++'],
        ['name' => 'C#'],
        ['name' => 'Visual Basic'],
        ['name' => 'JavaScript'],
        ['name' => 'PHP'],
        ['name' => 'Assembly language'],
        ['name' => 'SQL'],
        ['name' => 'Groovy'],
        ['name' => 'Visual Basic'],
        ['name' => 'Fortran'],
        ['name' => 'R'],
        ['name' => 'Ruby'],
        ['name' => 'Swift'],
        ['name' => 'MATLAB'],
        ['name' => 'Go'],
        ['name' => 'Prolog'],
        ['name' => 'Perl'],
        ['name' => 'SAS'],
        ['name' => 'Delphi/Object Pascal'],
        ['name' => 'Objective-C'],
        ['name' => 'Rust'],
        ['name' => 'Scratch'],
        ['name' => 'Julia'],
        ['name' => 'Ada'],
        ['name' => 'Lisp'],
        ['name' => 'Dart'],
        ['name' => 'PL/SQL'],
        ['name' => '(Visual) FoxPro'],
        ['name' => 'Scala'],
        ['name' => 'ABAP'],
        ['name' => 'COBOL'],
        ['name' => 'Logo'],
        ['name' => 'F#'],
        ['name' => 'Kotlin'],
        ['name' => 'Transact-SQL'],
        ['name' => 'Lua'],
        ['name' => 'Scheme'],
        ['name' => 'Ladder Logic'],
        ['name' => 'VBScript'],
        ['name' => 'D'],
        ['name' => 'Clojure'],
        ['name' => 'LabVIEW'],
        ['name' => 'Nim'],
        ['name' => 'VHDL'],
        ['name' => 'Apex'],
        ['name' => 'TypeScript'],
        ['name' => 'Bash'],
    ];
}
