<?php

declare(strict_types=1);

namespace Liberu\CRM\Enrichment\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/** @property int $team_id @property int $profile_id @property string $status */
final class EnrichmentChange extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_enrichment_changes';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['detected_at' => 'datetime'];
    }
}
