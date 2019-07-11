package space

// Planet ...
type Planet string

// PlanetMap ...
var PlanetMap = make(map[Planet]float64)

const earthSecond = 31557600

func setData() {
	PlanetMap["Mercury"] = 0.2408467
	PlanetMap["Venus"] = 0.61519726
	PlanetMap["Mars"] = 1.8808158
	PlanetMap["Jupiter"] = 11.862615
	PlanetMap["Saturn"] = 29.447498
	PlanetMap["Uranus"] = 84.016846
	PlanetMap["Neptune"] = 164.79132
}

// Age ...
func Age(s float64, p Planet) float64 {
	setData()

	o := s / earthSecond

	if u, ok := PlanetMap[p]; ok {
		return o / u
	}
	return o
}
