
using System;
using System.Diagnostics;

class Program {
    static double Calculate(int iterations, double param1, double param2) {
        double result = 1.0;
        for (int i = 1; i <= iterations; i++) {
            double j = i * param1 - param2;
            result -= (1 / j);
            j = i * param1 + param2;
            result += (1 / j);
        }
        return result;
    }

    static void Main(string[] args) {
        int iterations = 100_000_000;
        double param1 = 4, param2 = 1;

        Stopwatch stopwatch = Stopwatch.StartNew();
        double result = Calculate(iterations, param1, param2) * 4;
        stopwatch.Stop();

        Console.WriteLine($"Result: {result:F12}");
        Console.WriteLine($"Execution Time: {stopwatch.Elapsed.TotalSeconds:F6} seconds");
    }
}
