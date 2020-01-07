package gigasecond

import (
	"math"
	"time"
)

func AddGigasecond(t time.Time) time.Time {
	return t.Add(time.Duration(int(math.Pow(10.0, 9))) * time.Second)

	// use 1e9
	// reference: https://exercism.io/tracks/go/exercises/gigasecond/solutions/3b50c19a0efc4eeb93095856fa95922e
	//return t.Add(time.Duration(1e9 * time.Second))

}
