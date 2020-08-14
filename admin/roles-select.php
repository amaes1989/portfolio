<h3>Role</h3>
                            <?php
                            $roles = Role::find_all();
                            $role = Role::find_by_id($user->role_id);
                            ?>
                            <select name="role">
                                <?php foreach ($roles as $r) :

                                    if ($user->role_id == $r->id) {
                                        $selected = 'selected="selected"';
                                    } else {
                                        $selected = '';
                                    }
                                ?>
                                    <option value="<?php echo $r->id; ?>" <?php echo $selected; ?>><?php echo $r->role; ?></option>


                                <?php endforeach; ?>
                            </select>