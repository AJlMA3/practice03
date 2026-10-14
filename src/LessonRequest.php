<?php
declare(strict_types=1);

namespace App;

final readonly class LessonRequest
{
    public function __construct(
        public string $fullName,
        public string $email,
        public string $topic,
        public int $seats,
    ) {
        if ($seats < 1 || $seats > 5) {
            throw new \InvalidArgumentException('Количество мест должно быть от 1 до 5');
        }
    }

    public function fits(Lesson $lesson): bool
    {
        // TODO P03-FITS: совпадает ли тема и хватает ли свободных мест?
        throw new \RuntimeException('TODO P03-FITS');
    }
}
