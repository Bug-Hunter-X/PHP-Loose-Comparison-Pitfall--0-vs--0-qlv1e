# PHP Loose Comparison Pitfall: 0 vs -0

This example demonstrates a potential issue with PHP's loose comparison operator (`==`).  When comparing `0` and `-0`, loose comparison yields `false`, even though mathematically they are equal. This is because loose comparison does type coercion.  This behavior can lead to unexpected bugs.

The `bug.php` file contains code that illustrates this issue, and the `bugSolution.php` file shows the corrected version that leverages strict comparison (`===`).