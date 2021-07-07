---
title: got
---

# got

This is an HTTP Client for the Platform SDK. The implementation makes use of [got](https://github.com/sindresorhus/got) and adheres to the contracts laid out in the [specification](/docs/payvo-sdk/specification).

## Repository

<livewire:embed-link url="https://github.com/ArkEcosystem/platform-sdk/tree/master/packages/platform-sdk-http-got" />

## Installation

```bash
yarn add @payvo/sdk-http-got
```

## Usage

```typescript
import { Environment } from "@payvo/sdk-profiles";
import { Request } from "@payvo/sdk-http-got";

new Environment({ httpClient: new Request() });
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to [security@ark.io](mailto:security@ark.io). All security vulnerabilities will be promptly addressed.
