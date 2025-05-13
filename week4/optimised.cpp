```cpp
#include <iostream>
#include <chrono>

double Calculate(int iterations, double param1, double param2) {
    double result = 0.0;
#pragma unroll(4)
    for (int i = 1; i <= iterations; ++i) {
        double j = static_cast<double>(i) * param1 - param2;
        result -= (1.0 / j);
        j = static_cast<double>(i) * param1 + param2;
        result += (1.0 / j);
    }
    return result;
}

int main() {
    int iterations = 100000000;
    double param1 = 4, param2 = 1;

    auto start = std::chrono::high_resolution_clock::now();
    double result = Calculate(iterations, param1, param2) * 4;
    auto end = std::chrono::high_resolution_clock::now();

    std::cout << "Result: " << std::setprecision(12) << result << '\n';
    std::cout << "Execution Time: " << std::chrono::duration_cast<std::chrono::seconds>(end - start).count() << " seconds\n";

    return 0;
}
```