# Usage in PHP

Welcome! This guide will teach you how to easily use yaConverter in PHP.

[First, install extension.](Installation.md)

Functions:
=====
All the functions are simple and use one of the following templates:
- AToB (O)
- ABToC (O)
- AToBC (O)
- AToBA (O)
- ABToB (O)

where A,B and C are units shortcuts and O is input(-s).
So, technically we can merge these templates to one, more simplified:
- XXToXX (O), where X is unit shortcut, O is input(-s).

But, notice, that use only up to 3 units per once. For example,
InToMiYd will work, while InFtToMiYd not.
But, you can use multiple functions to do so, for example:
InToMiYd(InFtToIn).

In the names of the functions we use units shortcuts, but in outputs (if more than one) we use full names.

Let's take a look at example functions:
- echo InToFt(24); will output 2, because one foot (Ft) is 12 inches (In).
- echo InToFtIn(20); will output array("feet" => 1, "inches" => 8).

One last thing, make sure you converting units that are used for the same measurements (e.g. don't try to convert lenght units to weight)!

Now, you know all about how to use them.

Supported units:
=====
Full names / Shortcuts:

U.S. Units:
-----
- inches / In
- feet / Ft
- yards / Yd
- miles / Mi
- ounces / Oz
- pounds / Lb
- stones / St
- tons / T
- feet per second / Fps
- miles per hour / Mph
- knots / Knots
- sq. inches / SqIn
- sq. feet / SqFt
- sq. yards / SqYd
- sq. miles / SqMi
- acres / Ac
- cu. inches / CuIn
- cu. feet / CuFt
- cu. yards / CuYd
- cu. miles / CuMi
- gallons / Gal
- fl. ounces / FlOz
- pints / Pt
- quarts / Qt
