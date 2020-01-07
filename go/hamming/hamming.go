package hamming

import (
	"errors"
	"strings"
)

func Distance(a, b string) (int, error) {

	i,err := diff(strings.Split(strings.ToLower(a), ""), strings.Split(strings.ToLower(b), ""))

	return i, err
}

func diff(a []string, b []string) (int, error) {

	if len(a) != len(b) {
		return 0, errors.New("different lengths")
	}

	count := 0
	for i, v1 := range a {
		v2 := b[i]
		if v1 != v2 {
			count++
		}

	}

	return count, nil
}
