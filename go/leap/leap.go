// This is a "stub" file.  It's a little start on your solution.
// It's not a complete solution though; you have to write some code.

// Package leap should have a package comment that summarizes what it's about.
// https://golang.org/doc/effective_go.html#commentary
package leap

// IsLeapYear should have a comment documenting it.
// rule:
// 1. 公元年分除以4不可整除，為平年。
// 2. 公元年分除以4可整除但除以100不可整除，為閏年。
// 3. 公元年分除以100可整除但除以400不可整除，為平年。
// 4. 公元年分除以400可整除，為閏年。
func IsLeapYear(y int) bool {
	// Write some code here to pass the test suite.
	// Then remove all the stock comments.
	// They're here to help you get started but they only clutter a finished solution.
	// If you leave them in, reviewers may protest!

	if y%4 == 0 && y % 100 != 0{
		return true
	} else if y%400 == 0 {
		return true
	}

	return false
}
