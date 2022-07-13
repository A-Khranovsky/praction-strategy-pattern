### Vocation
To have praction with strategy patern, using PHP7.

### Description
The project creates a context object that takes one of the three algorithm objects in turn.
An array [1, 2, 3, 4, 5, 6], number 4, is passed to the context object. 
When using the first algorithm, each element of the array is summed with the number 4.
When using the second algorithm, each element of the array is multiplied by the number 4.
When using the third algorithm each element of the array is raised to the power of 4.
The first use of the algorithm is through the constructor of the context object, 
in other cases the algorithm is set through the setStrategy method.
That is, the change of algorithms is performed when the object is running, at runtime.
The project outputs the result to the browser.
```
Pervious array:

Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5
    [5] => 6
)


With adder:

Array
(
    [0] => 5
    [1] => 6
    [2] => 7
    [3] => 8
    [4] => 9
    [5] => 10
)


With multiplier:

Array
(
    [0] => 4
    [1] => 8
    [2] => 12
    [3] => 16
    [4] => 20
    [5] => 24
)


With exponentiation:

Array
(
    [0] => 1
    [1] => 16
    [2] => 81
    [3] => 256
    [4] => 625
    [5] => 1296
)
```
