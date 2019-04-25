# Tasking
阶段1：
* [ ] 输入一个正常数字（即不为3的倍数，又不为5的倍数的数字），输出原数字
    * [ ] 输入1，输出1
    * [ ] 输入2，输出2
* [ ] 输入一个为3的倍数的数字，输出Fizz
    * [ ] 输入3，输出Fizz
    * [ ] 输入6，输出Fizz
* [ ] 输入一个为5的倍数的数字，输出Buzz
    * [ ] 输入5，输出Buzz
    * [ ] 输入10，输出Buzz
* [ ] 输入一个即为3的倍数，又为5的倍数的数字，输出FizzBuzz
    * [ ] 输入15，输出FizzBuzz

阶段2：
* [ ] 输入一个为3的倍数或包括3的数字，输出Fizz
    * [ ] 输入13，输出Fizz
* [ ] 输入一个为5的倍数或包括5的数字，输出Buzz
    * [ ] 输入52，输出Buzz
* [ ] 输入一个即（为3的倍数或包括3的数字）又（为5的倍数或包括5的数字），输出FizzBuzz
    * [ ] 输入51，输出FizzBuzz

# Problem Description

Imagine the scene. You are eleven years old, and in the five minutes before the end of the lesson, your Maths teacher decides he should make his class more “fun” by introducing a “game”. He explains that he is going to point at each pupil in turn and ask them to say the next number in sequence, starting from one. The “fun” part is that if the number is divisible by three, you instead say “Fizz” and if it is divisible by five you say “Buzz”. So now your maths teacher is pointing at all of your classmates in turn, and they happily shout “one!”, “two!”, “Fizz!”, “four!”, “Buzz!”… until he very deliberately points at you, fixing you with a steely gaze… time stands still, your mouth dries up, your palms become sweatier and sweatier until you finally manage to croak “Fizz!”. Doom is avoided, and the pointing finger moves on.

So of course in order to avoid embarassment infront of your whole class, you have to get the full list printed out so you know what to say. Your class has about 33 pupils and he might go round three times before the bell rings for breaktime. Next maths lesson is on Thursday. Get coding!

Write a program that prints the numbers from 1 to 100. But for multiples of three print “Fizz” instead of the number and for the multiples of five print “Buzz”. For numbers which are multiples of both three and five print “FizzBuzz “.

Sample output:

<pre>
1
2
Fizz
4
Buzz
Fizz
7
8
Fizz
Buzz
11
Fizz
13
14
FizzBuzz
16
17
Fizz
19
Buzz
... etc up to 100
</pre>

# Stage 2 - new requirements
 * A number is fizz if it is divisible by 3 or if it has a 3 in it
 * A number is buzz if it is divisible by 5 or if it has a 5 in it