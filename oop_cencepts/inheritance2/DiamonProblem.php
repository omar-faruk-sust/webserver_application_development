<?php

/**
*      A
*     / \
*    B   C
*     \ /
*      D
* Diamond issue: Class A is the base class.
* Classes B and C both inherit from A.
* Class D inherits from both B and C.
*
* The problem arises when:
* Both B and C override a method or property from A.
* D inherits from both B and C, but it's unclear which version of the method or property D should use.
*
*/

class A {
    public function greet() {
        echo "Hello from A!\n";
    }
}

class B extends A {
    public function greet() {
        echo "Hello from B!\n";
    }
}

class C extends A {
    public function greet() {
        echo "Hello from C!\n";
    }
}

// Hypothetical multiple inheritance (not allowed in PHP)
//class D extends B, C {
    // Which greet() should be called? B's or C's?
//}

?>