
package main

import (
	"fmt"
	"time"
)

func Calculate(iterations int, param1 float64, param2 float64) float64 {
	var result float64 = 1.0
	for i := 1; i <= iterations; i++ {
		j := float64(i) * param1 - param2
		result -= 1 / j
		j = float64(i) * param1 + param2
		result += 1 / j
	}
	return result
}

func main() {
	iterations := 100_000_000
	param1 := 4.0
	param2 := 1.0

	start := time.Now()
	result := Calculate(iterations, param1, param2) * 4
	elapsed := time.Since(start)

	fmt.Printf("Result: %.12f\n", result)
	fmt.Printf("Execution Time: %.6f seconds\n", elapsed.Seconds())
}
