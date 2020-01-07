package strand

import (
	"fmt"
	"strings"
)

func ToRNA(dna string) string {
	dnaSlice := strings.Split(dna, "")

	newDNA := ""
	for _, s := range dnaSlice {
		s = transition(s)
		newDNA = fmt.Sprintf("%s%s", newDNA, s)
	}

	return newDNA
}

func transition(s string) string {
	switch s {
	case "G":
		s = "C"
		break
	case "C":
		s = "G"
		break
	case "T":
		s = "A"
		break
	case "A":
		s = "U"
	}

	return s
}
