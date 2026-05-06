# Beacon Sec Scanner Core Walkthrough

This walk-through keeps the domain vocabulary close to the data instead of burying it in prose.

| Case | Focus | Score | Lane |
| --- | --- | ---: | --- |
| baseline | trust boundary | 197 | ship |
| stress | claim drift | 197 | ship |
| edge | replay exposure | 103 | hold |
| recovery | policy width | 145 | ship |
| stale | trust boundary | 217 | ship |

Start with `stale` and `edge`. They create the widest contrast in this repository's fixture set, which makes them better review anchors than the middle cases.

`stale` is the optimistic case; use it to make sure the scoring path still rewards strong signal.
