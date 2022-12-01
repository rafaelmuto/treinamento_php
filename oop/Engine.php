<?php

class Engine
{
    private bool $status;
    private int $displacement;

    public function __construct(int $displacement)
    {
        $this->displacement = $displacement;
        $this->status = false;
    }

    public function getStatus(): bool
    {
        return $this->status;
    }

    public function start(): void
    {
        $this->status = true;
        echo "VROOM: engine is running! \n";
    }

    public function stop(): void
    {
        $this->status = false;
        echo "engine is off \n";
    }

    public function getDisplacement(): int
    {
        return $this->displacement;
    }

    public function getInfo(): array
    {
        return [
            'status' => $this->status,
            'displacement' => $this->displacement
        ];
    }
}
