# beacon-sec-scanner-core

`beacon-sec-scanner-core` is a PHP project in security tooling. Its focus is to implement a PHP security tooling project for scanner constraint solving, using bounded scenario files and conflict explanations.

## Purpose

I want this repository to be useful as a quick reading exercise: fixtures first, implementation second, verifier last.

## Beacon Sec Scanner Core Review Notes

For a quick review, compare `trust boundary` with `replay exposure` before reading the middle cases.

## What Is Covered

- `fixtures/domain_review.csv` adds cases for trust boundary and claim drift.
- `metadata/domain-review.json` records the same cases in structured form.
- `config/review-profile.json` captures the read order and the two review questions.
- `examples/beacon-sec-scanner-walkthrough.md` walks through the case spread.
- The PHP code includes a review path for `trust boundary` and `replay exposure`.
- `docs/field-notes.md` explains the strongest and weakest cases.

## Implementation Notes

The implementation keeps the scoring rule plain: reward signal and confidence, preserve slack, penalize drag, then classify the result into a review lane.

The PHP addition stays small enough to inspect in one sitting.

## Command

```powershell
powershell -NoProfile -ExecutionPolicy Bypass -File scripts/verify.ps1
```

## Audit Path

The same command runs the local verification path. The highest-scoring domain case is `stale` at 217, which lands in `ship`. The most cautious case is `edge` at 103, which lands in `hold`.

## Limits

The repository is intentionally scoped to local checks. I would expand it by adding adversarial fixtures before adding features.
