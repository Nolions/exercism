package triangle

import "math"

type Kind int

const (
	NaT Kind = iota // not a triangle
	Equ             // equilateral
	Iso             // isosceles
	Sca             // scalene
)

func KindFromSides(a, b, c float64) Kind {
	var k Kind = NaT

	if isTriangle(a, b, c) {
		k = triangleKind(a, b, c)
	}

	return k
}

func isTriangle(a, b, c float64) bool {
	if a <= 0 || b <= 0 || c <= 0 {
		return false
	} else if math.IsNaN(a) || math.IsNaN(b) || math.IsNaN(c) {
		return false
	} else if math.IsInf(a, 0) || math.IsInf(b, 0) || math.IsInf(c, 0) {
		return false
	} else if a+b < c || a+c < b || c+b < a {
		return false
	}

	return true
}

func triangleKind(a, b , c float64) Kind {
	var k Kind = Sca

	if equTriangle(a, b, c) {
		k = Equ
	} else if isoTriangle(a, b, c) {
		k = Iso
	}

	return k
}

func equTriangle(a, b, c float64) bool {
	if a == b && b == c {
		return true
	}

	return false
}

func isoTriangle(a, b, c float64) bool {
	if a == b || a == c || b == c {
		return true
	}

	return false
}
