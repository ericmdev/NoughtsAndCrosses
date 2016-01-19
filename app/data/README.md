# NoughtsAndCrosses Data

The train file `noughtsandcrosses.data` contains the train data.

### NoughtsAndCrosses Training Example

Here is an explanation for the [input file](http://php.net/manual/en/fann.examples-1.php) for training, as it might not be obvious to everyone and you must understand it to write your own:

    4 2 1 <- header file saying there are 4 sets to read, with 2 inputs and 1 output
    -1 -1 <- the 2 inputs for the 1st group
    -1    <- the 1 output for the 1st group
    -1 1  <- the 2 inputs for the 2nd group
    1     <- the 1 output for the 2nd group
    1 -1  <- the 2 inputs for the 3rd group
    1     <- the 1 output for the 3rd group
    1 1   <- the 2 inputs for the 4th group
    -1    <- the 1 output for the 4th group
