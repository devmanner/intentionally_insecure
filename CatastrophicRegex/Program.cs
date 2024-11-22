using System;
using System.Text.RegularExpressions;

namespace CatastrophicRegex
{
    class Program
    {

        static bool test(string regex, string s)
        {
            Console.WriteLine($"Starting testcase");
            var watch = System.Diagnostics.Stopwatch.StartNew();

            var r = Regex.Match(s, regex).Success;
            Console.WriteLine($"S: {s} RE: {regex} match? {r}");

            watch.Stop();

            Console.WriteLine($"Execution Time for testcase with length: {s.Length} is {watch.ElapsedMilliseconds} ms");
            return r;
        }


        static void Main(string[] args)
        {
            // Don't go longer than this...
            for (var i = 0; i < 25; ++i)
            {
                test(@"(a+)+$", new string('a', i) + "X");
            }
        }
    }
}
